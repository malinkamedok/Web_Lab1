<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB | Lab 1</title>
</head>
<body>
    <header class="header-section">
        <div class="header_credits">
            <h1 class="header_title">
                Lab #1 <span>Variant 34000</span>
            </h1>
            <p class="header_fio">
                Solovev Pavel
            </p>
           
        </div>
    </header>
    <php
        echo "hui";
    ?>
    <section class="main-section">
        <div class="container">
            <div class="picture">
                <svg height="300" width="300" xmlns="http://www.w3.org/2000/svg">
                    <line stroke="black" x1="0" x2="300" y1="150" y2="150"></line>
                    <line stroke="black" x1="150" x2="150" y1="0" y2="300"></line>

                    <text fill="black" x="195" y="140">R/2</text>
                    <text fill="black" x="250" y="140">R</text>
                    <text fill="black" x="40" y="140">-R</text>
                    <text fill="black" x="85" y="140">-R/2</text>
                    <text fill="black" x="160" y="55">R</text>
                    <text fill="black" x="160" y="105">R/2</text>
                    <text fill="black" x="160" y="204">-R/2</text>
                    <text fill="black" x="160" y="255">-R</text>
                    <text fill="black" x="285" y="140">X</text>
                    <text fill="black" x="160" y="15">Y</text>
    
                    <!-- draw triangle -->
                    <polygon fill="blue"
                             fill-opacity="0.3"
                             stroke="blue"
                             points="150,150 150,50 250,150">
                    </polygon>
    
                    <!-- draw circle -->
                    <path fill="blue"
                          fill-opacity="0.3"
                          stroke="blue"
                          d="M 200 150 C 200 200, 150 200, 150 200 L 150 150 Z">
                    </path>
    
                    <!-- draw square -->
                    <polygon fill="blue"
                             fill-opacity="0.3"
                             stroke="blue"
                             points="150,150 150,250 50,250 50,150">
                    </polygon>    
                </svg>
            </div>
            <div class="right-section">
                <div class="main-form-wrap">
                    <p class="form-text">
                        Check dot
                    </p>
                    <form action="check.php" class="main-form">
                        <div class="radius">
                            <p class="form-title">
                                Radius
                            </p>
                            <div class="radiuses">
                                <label>
                                    <input type="radio" name="r" value="1" required/>
                                    1
                                </label>
                                <label>
                                    <input type="radio" name="r" value="2"/>
                                    2
                                </label>
                                <label>
                                    <input type="radio" name="r" value="3"/>
                                    3
                                </label>
                                <label>
                                    <input type="radio" name="r" value="4"/>
                                    4
                                </label>
                                <label>
                                    <input type="radio" name="r" value="5"/>
                                    5
                                </label>
                            </div>
                        </div>
                        <div class="x-coord">
                            <p class="form-title">
                                X coord
                            </p>
                            <input id="x-coord-input" type="text" name="x" placeholder="[ -5; 5 ]" maxlength="13" required/>
                        </div>
                        <div class="y-coord">
                            <p class="form-title">
                                Y coord
                            </p>
                            <div class="y-checkboxes required">
                                <label>
                                    <input type="checkbox" name="y" value="-2"/>
                                    -2
                                </label>
                                <label>
                                    <input type="checkbox" name="y" value="-1.5"/>
                                    -1.5
                                </label>
                                <label>
                                    <input type="checkbox" name="y" value="-1"/>
                                    -1
                                </label>
                                <label>
                                    <input type="checkbox" name="y" value="-0.5"/>
                                    -0.5
                                </label>
                                <label>
                                    <input type="checkbox" name="y" value="0"/>
                                    0
                                </label>
                                <label>
                                    <input type="checkbox" name="y" value="0.5"/>
                                    0.5
                                </label>
                                <label>
                                    <input type="checkbox" name="y" value="1"/>
                                    1
                                </label>
                                <label>
                                    <input type="checkbox" name="y" value="1.5"/>
                                    1.5
                                </label>
                                <label>
                                    <input type="checkbox" name="y" value="2"/>
                                    2
                                </label>
                            </div>
                        </div>
                        <button class="btn form-submit" type="submit">
                            Check
                        </button>
                    </form>
                    <button class="btn clear-btn">
                        Clear table
                    </button>
                </div>
                <div class="table-wrapper">
                    <div class="table-header">
                        <div class="x">X</div>
                        <div class="y">Y</div>
                        <div class="r">R</div>
                        <div class="time">Time</div>
                        <div class="time-stamp">Time spent</div>
                        <div class="hit">Hit</div>
                    </div>
                </div>
            </div>
            

        </div>
    </section>
    <footer class="footer-section">
        <div class="container">

        </div>
    </footer>
</body>
<style>
    .table-wrapper {
        margin-top: 5%;
    }
    .table-line,
    .table-header {
        display: flex;
        justify-content: space-around;
    }
    .table-header {
        font-size: 25px;
        margin-bottom: 2%;
    }
    .table-line div,
    .table-header div {
        width: 40px;
        text-align: center;
    }
    .btn {
        padding: 10px;
        font-size: 20px;
        margin-top: 5%;
    }
    @font-face {
        font-family: 'Fantasy';
        src: url('fonts/Fantasy.eot');
        src: url('fonts/Fantasy.eot?#iefix') format('embedded-opentype'),
            url('fonts/Fantasy.svg#Fantasy') format('svg'),
            url('fonts/Fantasy.ttf') format('truetype'),
            url('fonts/Fantasy.woff') format('woff'),
            url('fonts/Fantasy.woff2') format('woff2');
        font-weight: normal;
        font-style: normal;
    }

    * {
        font-family: "Fantasy", sans-serif;
        margin: 0;
        padding: 0;
    }
    .container {
        padding: 3%;
    }   
    a:link { 
        color: red; 
    }
    a:visted { 
        color: purple; 
    }
    p {
        font-size: 24px;
    }
    header {
        margin: 3%;
        padding: 1%;
        background-color: #a5d6a7;
        box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, 0.15);
    }
    header h1 {
        font-size: 32px;
    }
    header h1 span {
        opacity: 0.5;
    }
    .header_fio {
        position: relative;
        font-size: 26px;
    }
    .header_fio::after {
        content: "P33312";
        opacity: 0.5;
        position: absolute;
        font-size: 18px;
        top: 0%;
        padding-left: 0.5%;
    }
    .main-section .container {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    .main-form {
        padding: 2%;
        background-color: #90caf9;
        box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, 0.15);
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        /* grid-gap: 0.3%; */
    }
    .y-checkboxes {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 1%;
    }
    .main-form__sent {

    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./js/index.js"></script>
</html>