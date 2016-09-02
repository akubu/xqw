/**
 * Created by sysadmin on 21/7/16.
 */
import Vue from 'vue';
import Chart from 'chart.js' ;

Vue.component(graph,{
    template:'<canvas width="600" height="400" id="a"></canvas>',
   ready(){
       var data={
           labels: ['january','February','March'],

           datasets: [

               {
                   data:[10,20,30]

               },
               {
                   data:[30,20,10]
               }

           ]
       };
       var context=document.getElementById('a').getContext('2d');
       var chart=new Chart(context,{
           type:'bar',
           data:data

       });

   }

});