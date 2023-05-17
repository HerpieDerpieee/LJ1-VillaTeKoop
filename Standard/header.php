<div id="header">
    <div class="headerContentLeft">
        <div class="logoLeft">
            <div class="logo">LOGO</div>
        </div>
        <div class="navLinks">
            <a href="" class="link">Home</a>
            <a href="" class="link">Contact</a>
        </div>
    </div>
    <div class="headerContentRight">
        <button class="button">Log In</button>
        <button class="button">Registreer</button>
    </div>
    <style>
        /*---------------------HEADER------------------------*/

        #header {
            background: red;
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
            background: yellow;
        }
        #header .headerContentLeft .navLinks {
            display: flex;
            justify-content: space-around;
            width: 50%;
            align-items: center;
        }
        #header .headerContentLeft .navLinks a {
            text-decoration: none;
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
        }
    </style>
</div>