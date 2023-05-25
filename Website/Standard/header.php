<div id="header">
    <div class="headerContentLeft">
        <div class="logoLeft">
            <img src="./img/logo.png" alt="logo" class="logo">
        </div>
        <div class="navLinks">
            <a href="" class="link">Home</a>
            <a href="" class="link">Contact</a>
        </div>
    </div>
    <div class="headerContentRight">
        <button class="button mouseOverBigger" id="LogIn">Log In</button>
        <button class="button mouseOverBigger" id="Regis">Registreer</button>
    </div>
    <style>
        /*---------------------HEADER------------------------*/

        #header {
            /*background: rgba(255,255,255,0.5);*/
            width: 100%;
            height: var(--header-height);
            display: flex;
            justify-content: space-between;

        }
        #header .headerContentLeft {
            width: 30%;
            display: flex;
        }
        #header .headerContentLeft .logoLeft {
            width: 50%;
            background: none;
            display: flex;
            justify-content: center;
        }
        #header .headerContentLeft .navLinks {
            display: flex;
            justify-content: space-around;
            width: 50%;
            align-items: center;
            color: #5588e7;
        }
        #header .headerContentLeft .navLinks a {
            text-decoration: none;
            color: #5588e7;
        }
        #header .headerContentLeft .navLinks a:hover{
            color: #6e9bf0;
        }

        #header .headerContentRight {
            width: 30%;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 20px;
            margin-right: 30px;
        }
        #header .headerContentRight button{
            width: 30%;
            height: 50%;
            box-shadow: 7px 7px 7px #aaaaaa;
            border-radius: 10px;
        }
        #header .headerContentRight #LogIn{
            border: #5588e7 solid 2px;
            color: #5588e7;
            background-color: white ;

        }
        #header .headerContentRight #Regis{
            border: #5588e7 solid 2px;
            background-color: #5588e7 ;
            color: white;
        }
        .mouseOverBigger{
            transition: 0.3s;
        }
        .mouseOverBigger:hover{
            transform: scale(1.1);
        }
    </style>
</div>