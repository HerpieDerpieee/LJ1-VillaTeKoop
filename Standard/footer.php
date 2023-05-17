<div id="footer">
    <div class="aboveLine">
        <div class="left">
            <a href="">Link 1</a>
            <a href="">Link 2</a>
            <a href="">Link 3</a>
        </div>
        <div class="center">Dit is foto</div>
        <div class="right">
            <a href="">Link 4</a>
            <a href="">Link 5</a>
            <a href="">Link 6</a>
        </div>
    </div>
    <hr>
    <div class="belowLine">
        <div class="belowContent">
            <div class="footerSocials">
                <div class="social"></div>
                <div class="social"></div>
                <div class="social"></div>
                <div class="social"></div>
            </div>
            <span>
                Copyright shit
            </span>
        </div>
    </div>
    <style>
        /*---------------------FOOTER------------------------*/
        #footer {
            background: blue;
            width: 100%;
            height: var(--footer-height);
            position: absolute;
            top: calc(var(--page-height) - var(--footer-height));
        }
        #footer .aboveLine {
            height: 20%;
            display: flex;
            justify-content: space-between;
        }
        #footer hr {
            border-color: black;
        }

        .left, .right {
            width: 35%;
        }
        #footer .aboveLine .left,
        #footer .aboveLine .right{
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        #footer .aboveLine .left a:hover,
        #footer .aboveLine .right a:hover {
            color: gray;
        }

        #footer .aboveLine .left a,
        #footer .aboveLine .right a {
            color: black;
            text-decoration: none;
        }

        #footer .aboveLine .center {
            width: 20%;
            background-color: goldenrod;

        }


        #footer .belowLine {
            display: flex;
            justify-content: center;
            margin-top: 2vh;
            height: 70%;
        }
        #footer .belowLine .belowContent {
            width: 100%;
            background: lightpink;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
        }

        #footer .belowLine .belowContent .footerSocials {
            width: 30%;
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            height: 20%;

        }
        #footer .belowLine .belowContent .footerSocials .social {
            background: gold;
            width: 20%;
            height: 100%;
            border-radius: 50px;
        }


    </style>
</div>