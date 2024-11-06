$(document).ready(function() {
  $('#table_salle').DataTable(); // Initialize DataTable
});

function expo() {
  // Obtain DataTable instance
  var table = $('#table_ensaignant').DataTable();

  // Create data array for headers and rows
  var data = [];
  var headers = [];

  // Extract headers, skipping "Action" column
  table.columns().every(function() {
    if (this.header().textContent !== "Action") {
      headers.push(this.header().textContent.trim()); // Trim to remove extra whitespace
    }
  });
  data.push(headers);

  // Extract filtered data
  var filteredData = table.rows({
    filter: 'applied'
  }).data();

  filteredData.each(function(valueArray) {
    var rowData = [];
    valueArray.forEach(function(value, index) {
      if (index !== 7) { // Skip "Action" column
        // Use jQuery to get the text content directly
        rowData.push($('<div>').html(value).text().trim()); // Wrap value in a div to extract text
      }
    });
    data.push(rowData);
  });

  // Export to Excel with ExcelJS
  var workbook = new ExcelJS.Workbook();
  var worksheet = workbook.addWorksheet('Data Export');

  data.forEach(function(row) {
    worksheet.addRow(row);
  });

  workbook.xlsx.writeBuffer().then(function(buffer) {
    var blob = new Blob([buffer], {
      type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
    });
    var url = window.URL.createObjectURL(blob);
    var a = document.createElement('a');
    a.href = url;
    a.download = 'exported_data.xlsx';
    document.body.appendChild(a);
    a.click();
    window.URL.revokeObjectURL(url);
  });
}