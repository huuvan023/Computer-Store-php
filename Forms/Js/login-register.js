      $("#userPass").focus(function(){
         $("#passwordStrength").css("display","inline-block");
      });
      $("#userPass").blur(function(){
         $("#passwordStrength").css("display","none");
      });

      var pass = document.getElementById("userPass")
       pass.addEventListener('keyup',function(){
          checkPassword(pass.value);
      })
      function checkPassword(password){
        var strengthBar = document.getElementById("strength");
        var strength = 0;
        if(password.match(/[a-z]+/)){
          strength += 1;
        }
        if(password.match(/[A-Z]+/)){
          strength += 1;
        }
        if(password.match(/[#$^+=!*()@%&]+/)){
          strength += 1;
        }
        if(password.length > 5){
          strength += 1;
        }
        switch(strength){
          case 0 :
          strengthBar.value = 20;          
          break;
          case 1 :
          strengthBar.value = 40;
          break;
          case 2 :
          strengthBar.value = 60;
          break;
          case 3 :
          strengthBar.value = 80;
          break;
          case 4 :
          strengthBar.value = 100;
          break;
        }

      }