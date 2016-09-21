function createChart() {
	//Highcharts with mySQL and PHP - Ajax101.com
var p = document.getElementById('Party').value;
var s = document.getElementById('State').value;
var Months = ['SEP-2015', 'OCT-205', 'NOV-2015', 'DEC-2015', 'JAN-2016', 'FEB-2016', 'MAR-2016', 'APR-2016'];
var Sanders = [];
var Hillary = [];
var Trump = [];
var Cruz = [];
var Kasich = [];
var max = 9;
var counter = 0;
var candidatesName;
	$.post('processing.php',{party:p, state:s },function(data) {
		data = data.split('/');
		for (var i in data) {
			if(counter == 0)
			{
				candidatesName = data[i];
				counter = counter + 1;
			}
			else
			{
				if(candidatesName == "Sanders")
				{
					if(data[i] == "")
					{
						Sanders.push(null);
					}
					else
					{
						Sanders.push(parseFloat(data[i]));
					}
				}
				else if(candidatesName == "Clinton")
				{
					if(data[i] == "")
					{
						Hillary.push(null);
					}
					else
					{
						Hillary.push(parseFloat(data[i]));
					}
				}
				else if(candidatesName == "Trump")
				{
					if(data[i] == "")
					{
						Trump.push(null);
					}
					else
					{
						Trump.push(parseFloat(data[i]));
					}
				}
				else if(candidatesName == "Cruz")
				{
					if(data[i] == "")
					{
						Cruz.push(null);
					}
					else
					{
						Cruz.push(parseFloat(data[i]));
					}
				}
				else if(candidatesName == "Kasich")
				{
					if(data[i] == "")
					{
						Kasich.push(null);
					}
					else
					{
						Kasich.push(parseFloat(data[i]));
					}
				}
					
				counter = counter + 1;
			}
			counter = counter % max;
		}
		if(p == "Dem")
		{
		$('#chart').highcharts({
			chart : {
				type : 'spline'
			},
			title : {
				text : 'Simple Poll Election Results',
				style: {
                color: '#0000FF',
                fontWeight: 'bold'	
			}
			},
			subtitle : {
				text : 'Your #1 place for fast Polls',
				align: 'right',
				margin: 50,
				floating: true,
				style: {
                color: '#FF0000',
                fontWeight: 'bold'
				}
			},
			xAxis : {
				title : {
					text : 'Months',
					style: {
					color: '#FF0000',
					fontWeight: 'bold'
				}
				},
				categories : Months
			},
			yAxis : {
				title : {
					text : 'Percent of Votes'
					
				},
				labels : {
					formatter : function() {
						return this.value + '%'
					}
				}
			},
			tooltip : {
				crosshairs : true,
				shared : true,
				valueSuffix : ''
			},
			plotOptions : {
				spline : {
					marker : {
						radius : 4,
						lineColor : '#666666',
						lineWidth : 1
					}
				},
				series: {
                			connectNulls: true
            			}
			},
			series : [{
				name : 'Bernie',
				data : Sanders
			},{	
				name:'Hillary',
				data:Hillary
			}]
		});
		}
		else
		{
		$('#chart').highcharts({
			chart : {
				type : 'spline'
			},
			title : {
				text : 'Simple Poll Election Results',
				style: {
                color: '#0000FF',
                fontWeight: 'bold'	
			}
			},
			subtitle : {
				text : 'Your #1 place for fast Polls',
				align: 'right',
				margin: 50,
				floating: true,
				style: {
                color: '#FF0000',
                fontWeight: 'bold'
				}
			},
			xAxis : {
				title : {
					text : 'Months',
					style: {
					color: '#FF0000',
					fontWeight: 'bold'
				}
				},
				categories : Months
			},
			yAxis : {
				title : {
					text : 'Percent of Votes'
					
				},
				labels : {
					formatter : function() {
						return this.value + '%'
					}
				}
			},
			tooltip : {
				crosshairs : true,
				shared : true,
				valueSuffix : ''
			},
			plotOptions : {
				spline : {
					marker : {
						radius : 4,
						lineColor : '#666666',
						lineWidth : 1
					}
				},
				series: {
                			connectNulls: true
            			}
			},
			series : [{
				name : 'Trump',
				data : Trump
			},{	
				name:'Cruz',
				data:Cruz
			},{
				name:'Kasich',
				data:Kasich
			}]
		});
		}
	});
} 
