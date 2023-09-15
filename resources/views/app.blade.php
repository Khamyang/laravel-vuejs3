<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app-vue"></div>
    @vite('resources/js/app.js')

    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
    }
  </script>
  <script>
    let popup_language = document.getElementById('popup_language');
    let btn_language = document.getElementById('btn_language');
    let lg_change1= document.getElementById('lg_change1');
    let lg_change2= document.getElementById('lg_change2');
    let lg_change3= document.getElementById('lg_change3');
    let lg_change4= document.getElementById('lg_change4');
    btn_language.addEventListener('click',function(){
        if(popup_language.style.display ==='none' || popup_language.style.display ===''){
            popup_language.style.display ='block';
        }else{
            popup_language.style.display ='none';
        }
    })
    lg_change1.addEventListener('click',function(){
        popup_language.style.display ='none';
    });
    lg_change2.addEventListener('click',function(){
        popup_language.style.display ='none';
    })
    lg_change3.addEventListener('click',function(){
        popup_language.style.display ='none';
    })
    lg_change4.addEventListener('click',function(){
        popup_language.style.display ='none';
    })

    // $(document).ready(function(){
    //     $('#btn_language').click(function(){
    //         $('.popup_language').removeAttr('hidden');
    //     })
    // })
</script>
</body>
</html>
