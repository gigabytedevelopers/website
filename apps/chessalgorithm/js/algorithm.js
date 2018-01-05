window.onload = function() {
   var queen = new Array(8);
   var solution = new Array();
   var counter = 0;
   
   setQueen(0);
   
   function setQueen(q) {
       for(var i = 0; i < 8; i++) {
           if(canSetQueen(q, i)) {
               queen[q] = i;
               if(q == 7) {
                   solution[counter] = queen.slice();
                   counter++;
               }
               setQueen(q + 1);
           }
       }
   }
   
   function canSetQueen(row, col) {
       for(var i = 0; i < row; i++) {
           if((queen[i] == col) || (Math .abs(i - row) == Math.abs(queen[i] - col))) {
              return false; 
           }
       }
       return true;
   }
   
   var next = document.getElementById("next");
   var prev = document.getElementById("prev");
   
   counter = 0;
   showSolution("&#9819;");
   
   next.onclick = function() {
       showSolution("");
       counter++;
       counter %= solution.length;
       showSolution("&#9819;");
   }
   
   prev.onclick = function() {
       showSolution("");
       counter--;
       if(counter < 0) {
          counter = solution.length - 1;
       }
       showSolution("&#9819;");
   }
   
   function showSolution(a) {
       for(var i = 0; i < 8; i++) {
          document.getElementsByTagName("tr")[i].getElementsByTagName("td")[solution[counter][i]].innerHTML = a;
       }
   }
}