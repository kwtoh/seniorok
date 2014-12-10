$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010 Q1',
            happiness: 5,
        }, {
            period: '2010 Q2',
            happiness: 3,
        }, {
            period: '2010 Q3',
            happiness: 4,
        }, {
            period: '2010 Q4',
            happiness: 5,
        }, {
            period: '2011 Q1',
            happiness: 5,
        }, {
            period: '2011 Q2',
            happiness: 4,
        }, {
            period: '2011 Q3',
            happiness: 3.4,
        }, {
            period: '2011 Q4',
            happiness: 3,
        }, {
            period: '2012 Q1',
            happiness: 5,
        }, {
            period: '2012 Q2',
            happiness: 3,
        }],
        xkey: 'period',
        ykeys: ['happiness'],
        labels: ['Average Happiness'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Area({
            element: 'morris-area-chart2',
            data: [{
                period: '2010 Q1',
                medication_miss: 10,
            }, {
                period: '2010 Q2',
                medication_miss: 12,
            }, {
                period: '2010 Q3',
                medication_miss: 16,
            }, {
                period: '2010 Q4',
                medication_miss: 4,
            }, {
                period: '2011 Q1',
                medication_miss: 15,
            }, {
                period: '2011 Q2',
                medication_miss: 20,
            }, {
                period: '2011 Q3',
                medication_miss: 24,
            }, {
                period: '2011 Q4',
                medication_miss: 12,
            }, {
                period: '2012 Q1',
                medication_miss: 15,
            }, {
                period: '2012 Q2',
                medication_miss: 16,
            }],
            xkey: 'period',
            ykeys: ['medication_miss'],
            labels: ['Medication miss'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });

});
