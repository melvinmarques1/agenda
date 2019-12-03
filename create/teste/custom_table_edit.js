$(document).ready(function(){
$('#data_table').Tabledit({
deleteButton: false,
editButton: false,
columns: {
identifier: [0, 'id'],
editable: [[1, 'Professor'], [2, 'Sala'], [3, 'Curso'], [4, 'Disciplina'], [5, 'Dia'], [6, 'Obs']]
},
hideIdentifier: true,
url: 'live_edit.php'
});
});