<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style type="text/css">
       /* *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background: #644bff;
            padding: 0 20px;
        }
        .wrapper{
            max-width: 450px;
            margin: 150px auto;
        }*/
        .search-input{
            max-width: 450px;
            position: relative;
            background: #fff;
            width: 100%;
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .search-input input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        }
        .search-input .icon{
            height: 55px;
            width: 55px;
            line-height: 55px;
            position: absolute;
            top: 0;
            right: 0;
            text-align: center;
            font-size: 20px;
            color: #644bff;
            cursor: pointer;
        }
        .search-input .autocom-box{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
        }
        .autocom-box li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .autocom-box li:hover{
            background: #efefef;
        }
        .search-input.active .autocom-box{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .search-input.active .autocom-box li{
            display: block;
        }


        .search-line{
            max-width: 450px;
            position: relative;
            background: #fff;
            width: 100%;
            border-radius: 5px;
            box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
        }
        .search-line input{
            height: 55px;
            max-width: 450px;
            width: 100%;
            outline: none;
            border: none;
            border-radius: 5px;
            /*padding: 0 60px 0 20px;*/
            font-size: 18px;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        }
        .search-line .icon{
            height: 55px;
            width: 55px;
            line-height: 55px;
            position: absolute;
            top: 0;
            right: 0;
            text-align: center;
            font-size: 20px;
            color: #644bff;
            cursor: pointer;
        }
        .search-line .autocom-line{
            padding: 0px;
            max-height: 280px;
            overflow-y: auto;
            opacity: 0;
            pointer-events: none;
        }
        .autocom-line li{
            list-style: none;
            padding:  8px 12px;
            width: 100%;
            cursor: default;
            border-radius: 3px;
            display: none;
        }
        .autocom-line li:hover{
            background: #efefef;
        }
        .search-line.active .autocom-line{
            padding: 10px 8px;
            opacity: 1;
            pointer-events: auto;
        }
        .search-line.active .autocom-line li{
            display: block;
        }
    </style>
</head>
<body>
   <!-- <div class="wrapper"> -->
    <div class="search-input" id="">
           <input type="text" placeholder="Tim Kiem...">
           <div class="autocom-box" style="">
               <li>login form in html</li>
           </div>
           <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>

       </div>

       <div class="search-line">
           <input type="text" placeholder="Tim Kiem..." id="inputtext">
           <div class="autocom-line">
               <li>login form in html</li>
           </div>
           <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>

       </div>
   <!-- </div> -->

  <script type="text/javascript">
       const searchWrapper = document.querySelector(".search-input")
       const inputBox = document.querySelector("input")
       const suggBox = document.querySelector(".autocom-box")
       
       inputBox.onkeyup = (e) => {
         let userData = e.target.value;
         let emptyArray = [];
         if(userData){
            emptyArray = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
            });
         emptyArray =  emptyArray.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            searchWrapper.classList.add("active")
            showSuggettions(emptyArray);
            let allList = suggBox.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select(this)")
            }
         }else{
            searchWrapper.classList.remove("active")
         }
       }

       function select(element){
        let selectUserData = element.textContent;
        inputBox.value = selectUserData;
       }

       function showSuggettions(list){
        let listData;
        if(!list.length){
             userValue = inputBox.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBox.innerHTML = listData;
       }
   </script>
   

 <script type="text/javascript">
       const searchWrapperr = document.querySelector(".search-line")
       const inputBoxx = document.getElementById("inputtext")
       const suggBoxx = document.querySelector(".autocom-line")
       
       inputBoxx.onkeyup = (e) => {
         let userData = e.target.value;
         let emptyArray = [];
         if(userData){
            emptyArray = suggettion.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
            });
         emptyArray =  emptyArray.map((data) => {
            return data = '<li>'+ data +'</li>';
         });
            searchWrapperr.classList.add("active")
            showSuggettions(emptyArray);
            let allList = suggBoxx.querySelectorAll("li")
            for (let i = 0; i < allList.length; i++) {
                allList[i].setAttribute("onclick","select(this)")
            }
         }else{
            searchWrapperr.classList.remove("active")
         }
       }

       function select(element){
        let selectUserData = element.textContent;
        inputBoxx.value = selectUserData;
       }

       function showSuggettions(list){
        let listData;
        if(!list.length){
             userValue = inputBoxx.value;
             listData = '<li>' + userValue + '</li>';
        }else{
            listData = list.join('')
        }
        suggBoxx.innerHTML = listData;
       }
   </script>



   <script type="text/javascript">
       let suggettion = [
       "V0264157-nguyen van thang",
       "V0264390-nguyen quang lam",
       "V0264732-nguyen tjan anh",
       "V0264948-nguyen van lam",
       "V0264237-tran van do",
       "V0264183-le van luong",
       "V0938283-tran thi dung",
       "V0298483-nguyen lan anh",
       "V0938288-tran thi lan",
       ];
   </script>


</body>
</html>