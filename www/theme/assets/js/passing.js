var fnPassing = {
    
    base_url : $('#base_url').val(),
    chart: null,
    table: null,

    isChangeType: function(){
        $('.series-type').off('click').on('click', function(e) {
            e.preventDefault();
            fnPassing.updateChart($(this).data('type'));
        });
    },
    isSearch: function(){
        $('#search').off('click').on('click', function(e) {
            e.preventDefault();
            fnService.getStaff();
            fnPassing.getBranchList();

            $('#page-content').show();
            $('.popup-list-wrapper').css({
                 display: 'none',
                 left: '-9999px',
                 opacity: '0'
            });
            $('.loader').removeClass('d-none');
            var params = $('#criteria-form').serialize();
            var url = fnPassing.base_url +'/get-summary-passing';
            $.post(url, params, function(response){
                var data = JSON.parse(response);
                
                $('.loader').addClass('d-none');
                $(".chart-div").empty();
                $(".table-div").empty();

                if(data != ''){
                    $.each(data, function(branch_id, value){
                        var categories = value.categories.split(",");
                        var data_passing_in = JSON.parse("[" + value.data_passing_in + "]");
                        var data_passing_out = JSON.parse("[" + value.data_passing_out + "]");
                        var data_passing = JSON.parse("[" + value.data_passing + "]");
                        var data_entrance = JSON.parse("[" + value.data_entrance + "]");
                        var data_percentage = JSON.parse("[" + value.data_percentage + "]");

                        fnPassing.renderTab(branch_id);
                        fnPassing.renderCard(branch_id);
                        fnPassing.renderChart(branch_id, categories, data_passing_in, data_passing_out, data_passing, data_entrance, data_percentage);
                        fnPassing.renderTable(branch_id, categories, data_passing_in, data_passing_out, data_passing, data_entrance, data_percentage);
                    });
                }
                
                fnService.getPeriod();
                $("#branch_select").trigger('change');
            });
        });
    },
    selectBranch :function(){
        $("#branch_select").change(function(){
            var branch_id = $(this).val();
            
            $(".chart-container, .table-container, .top-card-container").hide();
            
            $("#chart-"+branch_id).show();
            $("#table-container-"+branch_id).show();
            $("#summary-card-"+branch_id).show();
        });
    },
    renderChart: function(branch_id, categories, data_passing_in, data_passing_out, data_passing, data_entrance, data_percentage){
        var option = {
                title: {
                    text: ''
                },
                subtitle: {
                    text: ''
                },
                yAxis: {
                    title: {
                        text: 'Number of Visitor'
                    }
                },
                xAxis: {
                    categories: categories,
                },
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                },
                plotOptions: {
             
                },
                tooltip:{
                    shared : true
                },
                series: [{
                    type: 'line',
                    name: 'Entrance',
                    marker: {
                        symbol: 'circle'
                    },
                    data: data_entrance
                },{
                    type: 'line',
                    name: 'Passing(In)',
                    marker: {
                        symbol: 'circle'
                    },
                    data: data_passing_in
                },{
                    type: 'line',
                    name: 'Passing(Out)',
                    marker: {
                        symbol: 'circle'
                    },
                    data: data_passing_out
                },{
                    type: 'line',
                    name: 'Passing(Summary)',
                    marker: {
                        symbol: 'circle'
                    },
                    data: data_passing
                }],
                credits: {
                    enabled : false
                },
                exporting: {
                    enabled : false
                },
                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'vertical',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }
            };

        Highcharts.chart('chart-'+branch_id, option); 
    },
    updateChart: function(type){
        Highcharts.charts.forEach(chart => {
            chart.update(
                {
                    series: [{
                        type: type,
                    }, {
                        type: type,
                    }, {
                        type: type, 
                    }, {
                        type: type, 
                    }],
                }
            );
        });
    },
    renderTab: function(branch_id){
        
        var chart_container = "<div class='chart-container' id='chart-"+branch_id+"'></div>";
        var table_template  = "<div class='dt-responsive table-responsive col-sm-12 table-container' id='table-container-"+branch_id+"'>"+
                                    "<table id='passing-table-"+branch_id+"' class='table compact table-striped table-bordered nowrap dataTable' style='width:100%'>"+
                                        "<thead>"+
                                            "<tr>"+
                                                "<th rowspan='2' class='text-center align-middle'>Time</th>"+
                                                "<th colspan='3' class='text-center'>Passing</th>"+
                                                "<th rowspan='2' class='text-center align-middle'>Entrance</th>"+
                                                "<th rowspan='2' class='text-center align-middle'>Percentage</th>"+
                                            "</tr>"+
                                            "<tr>"+
                                                "<th class='text-center'>In</th>"+
                                                "<th class='text-center'>Out</th>"+
                                                "<th class='text-center'>Summary</th>"+
                                            "</tr>"+
                                        "</thead>"+
                                    "</table>"+
                                "</div>";
        $(".chart-div").append(chart_container);
        $(".table-div").append(table_template);
    },
    renderCard: function(branch_id){
        var card_template = '<div class="row top-card-container" id="summary-card-'+branch_id+'">'+
                                '<div class="col-md-4">'+
                                    '<div class="card">'+
                                        '<div class="card-block">'+
                                            '<div class="row align-items-center m-l-0">'+
                                                '<div class="col-auto">'+
                                                    '<i class="ti-split-h f-30 text-c-yellow"></i>'+
                                                '</div>'+
                                                '<div class="col-auto">'+
                                                    '<h6 class="text-muted m-b-10">Passing</h6>'+
                                                    '<h2 class="m-b-0" id="number-total-passing-'+branch_id+'">0</h2>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-4">'+
                                    '<div class="card">'+
                                        '<div class="card-block">'+
                                            '<div class="row align-items-center m-l-0">'+
                                                '<div class="col-auto">'+
                                                    '<i class="icofont icofont-foot-print f-30 text-c-pink"></i>'+
                                                '</div>'+
                                                '<div class="col-auto">'+
                                                    '<h6 class="text-muted m-b-10">Entrance</h6>'+
                                                    '<h2 class="m-b-0" id="number-total-entrance-'+branch_id+'">0</h2>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
     
                                '<div class="col-md-4">'+
                                    '<div class="card">'+
                                        '<div class="card-block">'+
                                            '<div class="row align-items-center m-l-0">'+
                                                '<div class="col-auto">'+
                                                    '<i class="fa fa-percent f-30 text-c-blue"></i>'+
                                                '</div>'+
                                                '<div class="col-auto">'+
                                                    '<h6 class="text-muted m-b-10">Percentage</h6>'+
                                                    '<h2 class="m-b-0" id="number-total-percentage-'+branch_id+'">0 %</h2>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>';

        $("#top-card-div").empty().append(card_template);
    },
    renderTable: function(branch_id, categories, data_passing_in, data_passing_out, data_passing, data_entrance, data_percentage){
        
        var last_in = 0;
        var data = [];
        var sum_passing_in = 0;
        var sum_passing_out = 0;
        var sum_passing = 0;
        var sum_entrance = 0;
        var sum_percentage = 0;
        
        for(var i =0; i< categories.length; i++){
            data[i] = {
                "time": categories[i],
                "passing_in": fnService.formatComma(data_passing_in[i]),
                "passing_out": fnService.formatComma(data_passing_out[i]),
                "passing": fnService.formatComma(data_passing[i]),
                "entrance": fnService.formatComma(data_entrance[i]),
                "percentage": fnService.formatComma(data_percentage[i])+" %" 
            };

            sum_passing_in += Number(data_passing_in[i]);
            sum_passing_out += Number(data_passing_out[i]);
            sum_passing += Number(data_passing[i]);
            sum_entrance += Number(data_entrance[i]);
        }

        if(sum_passing != 0){
            sum_percentage = fnService.formatComma(((sum_entrance/sum_passing)*100).toFixed(2));
        }

        data[i] = {
                    "time": 'Total',
                    "passing_in":fnService.formatComma(sum_passing_in),
                    "passing_out":fnService.formatComma(sum_passing_out),
                    "passing":fnService.formatComma(sum_passing),
                    "entrance":fnService.formatComma(sum_entrance),
                    "percentage":fnService.formatComma(sum_percentage)+" %",
                };
        $('#number-total-passing-'+branch_id).html(fnService.formatComma(sum_passing));
        $('#number-total-entrance-'+branch_id).html(fnService.formatComma(sum_entrance));
        $('#number-total-percentage-'+branch_id).html(fnService.formatComma(sum_percentage+" %"));
        
        $('#passing-table-'+branch_id).DataTable({
            "lengthChange": false,
            "searching": false,
            "paging": false,
            "bInfo" : false,
            "ordering": false,
            "bDestroy" : true,
            "columnDefs": [
                { "width": "10%", "targets": 0, className: "text-left"  },
                { "width": "15%", "targets": 1, className: "text-center" },
                { "width": "15%", "targets": 2, className: "text-center" },
                { "width": "15%", "targets": 3, className: "text-center" },
                { "width": "15%", "targets": 4, className: "text-center" },
                { "width": "15%", "targets": 5, className: "text-center" },
            ],
            "data": data,
            "columns" : [
                { "data" : "time" },
                { "data" : "passing_in" },
                { "data" : "passing_out" },
                { "data" : "passing" },
                { "data" : "entrance" },
                { "data" : "percentage" },
            ]
        });
        
    },
    getBranchList: function(){
        var params = $('#criteria-form').serialize();
        var url = fnService.base_url +'/get-branch-selectbox';
        $.post(url, params, function(response){
            html = '';
            if(response != ''){
                html = '<option value="total">-- All Branchs --</option>';
                $("#branch_select").empty();
                var data = JSON.parse(response);
                $.each(data, function(index, value){
                    html += "<option value='"+value.branch_id+"'>"+value.branch_name+"</option>";
                });

                $("#branch_select").html(html);
            }else{
                html = '<option>-- No Data --</option>';
            }
        });
    },
    init : function(){
        fnPassing.isSearch(); 
        // fnPassing.updateChart();
        fnPassing.selectBranch();
        fnPassing.getBranchList();
        fnPassing.isChangeType();
    }
}

fnPassing.init();