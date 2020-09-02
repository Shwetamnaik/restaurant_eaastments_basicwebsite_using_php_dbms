<script>
            function validateForm(){
                
                    var a = document.forms["myForm"]["name"].value;
                    var b = document.forms["myForm"]["email"].value;
                    var c = document.forms["myForm"]["stars"].value;
                    var d = document.forms["myForm"]["message"].value;
                    
                    if(a==""){
                        alert" Name field cannot be empty... Try Again";
                        return false;
                    }
                    
                    if(b==""){
                        alert" Email field cannot be empty... Try Again";
                        return false;
                    }
                    
                    if(c=="" || c.length>1){
                        alert("Number should be from 0 to 5... Try Again");
                        return false;
                    }
                    
                    if(d==""){
                        alert("Message field is empty.. Fill it with your reviews...");
                        return false;
                    }
            }
                
                </script>
              