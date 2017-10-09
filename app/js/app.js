var dataList = new List();
function getList(){
    var options = {
      valueNames: [ 'listitem' ],
      item: '<li><h4 class="listitem"></h4></li>'
    };

    var values = [
      { listitem: 'Report #1'}
      , { listitem: 'Report #2'}
      , { listitem: 'Report #3'}
      , { listitem: 'Report #4'}
      , { listitem: 'Report #5'}
      , { listitem: 'Report #6'}
    ];
    dataList = new List('data-list', options, values);
}
function buildTable(){
    $('#table').bootstrapTable({
        columns: [{
            field: 'id',
            title: 'Item ID'
        }, {
            field: 'name',
            title: 'Item Name'
        }, {
            field: 'price',
            title: 'Item Price'
        }],
        data: [{
            id: 1,
            name: 'Item 1',
            price: '$1'
        }, {
            id: 2,
            name: 'Item 2',
            price: '$2'
        }]
    });
}
function reportType(s){
    if(s == 'btTable' || s.value == 'btTable'){
        $("#btTable").css("display","block");
        $("#cusomTemp").css("display","none");
    }else if(s == 'cusomTemp' || s.value == 'cusomTemp'){
        $("#btTable").css("display","none");
        $("#cusomTemp").css("display","block");
    }else{
        $("#btTable").css("display","none");
        $("#cusomTemp").css("display","block");
    }
}
getList();
buildTable();
var e = document.getElementById("reportTypeSelection");
var loadReport = e.options[e.selectedIndex].value;
reportType(loadReport);
$('#table').on('dbl-click-cell.bs.table', function (field, value, row, element) {
    console.log(element)
});
$('#table td').dblclick(function() {
    var $this = $(this);
    var prevValue = $this.text();
    var $input = $('<input>', {
        value: $this.text(),
        type: 'text',
        blur: function() {
           $this.text(this.value);
    console.log(prevValue+" update to "+this.value)
        },
        keyup: function(e) {
           if (e.which === 13) {$input.blur();}
        }
    }).appendTo( $this.empty() ).focus();
});