var inputLabel = document.getElementById('inputLabel');
                 
                 function pushBtn(obj) {
                      
                     var pushed = obj.innerHTML;
                      
                     if (pushed == '=') 
                     {
                         // Hitung
                         inputLabel.innerHTML = eval(inputLabel.innerHTML);
                          
                     }

                     else if (pushed == 'Reset') 
                     {
                         // Selesai
                         inputLabel.innerHTML = '0';
                          
                     } 
                     
                     else 
                     {
                         if (inputLabel.innerHTML == '0') 
                         {
                             inputLabel.innerHTML = pushed;    
                         } 

                         else 
                         {
                             inputLabel.innerHTML += pushed;   
                         }
                     }
                 }