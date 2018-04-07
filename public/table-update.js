let updateCount=0;

$(document).ready(function(){
    updateTable();
    setInterval(updateTable, 10000);
    
    //$("#dining-info").load("../table.php");
    
    $("#update").click(function(){
        updateTable();
    });
});

function updateTable(){
    $("#dining-info").load("../table.php");
    console.log('update', updateCount++)
}