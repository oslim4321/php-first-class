<!-- create product css -->
<?php
    session_start();
    if ($_SERVER['QUERY_STRING'] == 'noname') {
        unset($_SESSION['name']);
    };
    $gender = $_COOKIE['gender'] ?? 'Unknown';
    $name = $_SESSION['name'] ?? 'Guest';
?>


<head>
    <title>PHP LEARNING CLASS</title>

<!-- NAvbar -->
    <style>
        body {
            margin: 0;
            padding: 0;

        }

        nav {
            width: 100%;
            height: 70px;
            background-color: aliceblue;
            display: flex;
            align-items: center;
            justify-content: space-around;
            /* gap: 50%; */
        }

        button {
            font-weight: 700;
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            border: 0;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            font-size: 24px;

        }

        /* Create prodct */
    </style>

    <style>
        /* @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700); */

        /* html{    background:url(http://thekitemap.com/images/feedback-img.jpg) no-repeat; */
        /* background-size: cover;
    height:100%;
    } */

        #feedback-page {
            text-align: center;
        }

        #form-main {
            width: 100%;
            float: left;
            padding-top: 0px;
        }

        #form-div {
            background-color: rgba(72, 72, 72, 0.4);
            padding-left: 35px;
            padding-right: 35px;
            padding-top: 35px;
            padding-bottom: 50px;
            width: 450px;
            float: center;
            left: 50%;
            position: relative;
            margin-top: 30px;
            margin-left: -260px;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
        }

        .feedback-input {
            color: #3c3c3c;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: 500;
            font-size: 18px;
            border-radius: 0;
            line-height: 22px;
            background-color: #fbfbfb;
            padding: 13px 13px 13px 54px;
            margin-bottom: 10px;
            width: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
            border: 3px solid rgba(0, 0, 0, 0);
        }

        .feedback-input:focus {
            background: #fff;
            box-shadow: 0;
            border: 3px solid #3498db;
            color: #3498db;
            outline: none;
            padding: 13px 13px 13px 54px;
        }

        .focused {
            color: #30aed6;
            border: #30aed6 solid 3px;
        }

        /* Icons ---------------------------------- */
        #name {
            /* background-image: url(http://rexkirby.com/kirbyandson/images/name.svg); */
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #name:focus {
            /* background-image: url(http://rexkirby.com/kirbyandson/images/name.svg); */
            background-size: 30px 30px;
            background-position: 8px 5px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #email {
            /* background-image: url(http://rexkirby.com/kirbyandson/images/email.svg); */
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #email:focus {
            /* background-image: url(http://rexkirby.com/kirbyandson/images/email.svg); */
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #comment {
            /* background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg); */
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        textarea {
            width: 100%;
            height: 150px;
            line-height: 150%;
            resize: vertical;
        }

        input:hover,
        textarea:hover,
        input:focus,
        textarea:focus {
            background-color: white;
        }

        #button-blue {
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            float: left;
            width: 100%;
            border: #fbfbfb solid 4px;
            cursor: pointer;
            background-color: #3498db;
            color: white;
            font-size: 24px;
            padding-top: 22px;
            padding-bottom: 22px;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
            margin-top: -4px;
            font-weight: 700;
        }

        #button-blue:hover {
            background-color: rgba(0, 0, 0, 0);
            color: #0493bd;
        }

        .submit:hover {
            color: #3498db;
        }

        .ease {
            width: 0px;
            height: 74px;
            background-color: #fbfbfb;
            -webkit-transition: .3s ease;
            -moz-transition: .3s ease;
            -o-transition: .3s ease;
            -ms-transition: .3s ease;
            transition: .3s ease;
        }

        .submit:hover .ease {
            width: 100%;
            background-color: white;
        }

        @media only screen and (max-width: 580px) {
            #form-div {
                left: 3%;
                margin-right: 3%;
                width: 88%;
                margin-left: 0;
                padding-left: 3%;
                padding-right: 3%;
            }
        }
    </style>

    <!-- footer -->
    <style>
        footer p {

            color: gray;
        }
    </style>

    <!-- product pizza -->
    <style>
        .productWrap {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            row-gap: 20px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .price {
            color: grey;
            font-size: 22px;
            border-bottom: 1px solid gray;
            padding-bottom: 10px;
        }
        .card h1{
            margin: 0 3px;
            font-size: 30px
        }

        .card ul {
            list-style-type: none;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: grey;

        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            /* background-color: #000; */
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            background-color: #3498db;
        }

        .card button:hover {
            /* opacity: 0.7; */
            background-color: #3498db;
        }
    </style>

    <!-- detailsPage -->
    <style>
        .detailsPage {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .detailsPage h2{
            border-bottom:1px solid grey;
        }
    </style>

</head>

<body>
    <nav>
        <a href="index.php">
            <p>oslim Pizza</p>
        </a>
        <p>Hi <?php echo $name ?> <span>(<?php echo $gender ?>)</span></p>
       
        <a href="createPizza.php"><button>Add Pizza</button></a>
    </nav>