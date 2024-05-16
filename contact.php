<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Artz</title>
    <link rel="icon" type="image/x-icon" href="assets/logotab.png">

</head>
<body>
<?php include 'header.html';
include 'fixedButton.html' ?>

    <div class="contactHeader">
        <h1>CONTACT PAGE</h1>
        <p><a href = "home.php">Home </a> / Contact</p>
    </div>


    <div class = "outerMap">
        <div class = "innerMap" style = "display: flex; justify-content: center;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15410.188223530724!2d120.93897505541992!3d15.073148900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33970308f8801275%3A0x1d27f0cbb8b35592!2sBulacan%20Agricultural%20State%20College%2C%20Main%20Campus.!5e0!3m2!1sen!2sph!4v1712027495712!5m2!1sen!2sph" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe>
        </div>
    


    <div class="formContact">
        <div class = "col-4" id = "sideForm">


            <div class="sideFormItem">
                <div class="col-3 sideFormItemIcon">
                    <p><span class = "glyphicon glyphicon-earphone"></span></p>
                </div>                                                                     

                <div class="col-9 sideFormItemTexts">
                    <p class = "text1">Phone</p>
                    <p class = "text2">Toll-Free: 0803 - 080 - 3081</p>
                    <p class = "text2">Fax: 0803 - 080 - 3082</p>
                </div>
            </div>

            <div class="sideFormItem">
                <div class="col-3 sideFormItemIcon">
                    <p><span class = "glyphicon glyphicon-envelope"></span></p>
                </div>                                                                     

                <div class="col-9 sideFormItemTexts">
                    <p class = "text1">Phone</p>
                    <p class = "text2">Toll-Free: 0803 - 080 - 3081</p>
                    <p class = "text2">Fax: 0803 - 080 - 3082</p>
                </div>
            </div>

            <div class="sideFormItem">
                <div class="col-3 sideFormItemIcon">
                    <p><span class = "glyphicon glyphicon-send"></span></p>
                </div>                                                                     

                <div class="col-9 sideFormItemTexts">
                    <p class = "text1">Phone</p>
                    <p class = "text2">Toll-Free: 0803 - 080 - 3081</p>
                    <p class = "text2">Fax: 0803 - 080 - 3082</p>
                </div>
            </div>




        </div>
        <div class="col-8" id = "mainForm">
            <p class = "mainFormHeading">Contact Form</p>

            <input type="text" class = "mainFormInput" placeholder="Name">
            <input type="text" class = "mainFormInput" placeholder="Email">
            <input type="text" class = "mainFormInput" placeholder="Phone Number">
            <textarea name="" id="" cols="30" rows="10" placeholder = "Comment"></textarea>
            <button class = "mainFormButton">Send</button>
        </div>
    </div>
    </div>


    <?php include 'newFooter.html'; ?>

</body>
</html>


<style>
    .contactHeader{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 50px;
        background-color: #f7f7f7;
        margin-bottom: 12rem;
    }

    .contactHeader h1{
        font-family: sans-serif;
        font-weight: bold;
        font-size: 36px;
    }

    .contactHeader p{
        color: black;
        font-size: 16px;
        font-family: 'Rajdhani';
    }

    .contactHeader a{
        text-decoration: none;
        color: black;
        margin-right: 6px;
    }

    .innerMap{
        width: 85%;
    }

    .outerMap{
        displaY: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-bottom: 50px;

    }

    .formContact{
        display: flex;
        width: 85%;
        margin-top: 70px;
    }

    .formContact #sideForm .sideFormItem{
        border: solid #e5e5e5 0.5px;
        display: flex;
        padding: 50px 20px;
        margin-bottom: 30px;
        transition: .5s ease;
    }

    .formContact #sideForm .sideFormItem:hover{
        border: solid #58c5c7 1px;
    }

    .formContact #sideForm .sideFormItem .sideFormItemIcon{
        display: flex;
        justify-content: center;
        align-items: center;
        
    }

    .formContact #sideForm .sideFormItem .sideFormItemIcon p{
        background-color: black;
        padding: 15px;
        font-size: 20px;
    }

    .formContact #sideForm .sideFormItem .sideFormItemTexts .text1{
        color: black;
        font-size: 18px;
        font-family: sans-serif;
        margin-bottom: 15px;
        font-weight: bolder;
    }

    .formContact #sideForm .sideFormItem .sideFormItemTexts .text2{
        font-family: 'Rajdhani';
        font-size: 16px;
        color: black;
    }

    #mainForm{
        padding-lefT: 24px;
    }

    #mainForm .mainFormHeading{
        color: black;
        font-size: 26px;
        font-family: sans-serif;
        font-weight: bold;
        margin-bottom: 25px;
    }

    #mainForm .mainFormInput, #mainForm textarea{
        border: solid #e5e5e5 1px;
        padding: 15px 30px;
        margin-bottom: 30px;
        width: 100%;
        
    }

    #mainForm textarea{
        height: 23rem;
    }

    #mainForm .mainFormInput::placeholder, #mainForm textarea::placeholder {
        color: black;
        font-size: 20px;
        font-family: 'Rajdhani';
    }

    .mainFormButton{
        padding: 12px;
        width: 25rem;
        background-color: #0000;
        border: solid #58c5c7 2px;
        border-radius: 50px;
        transition: .5s ease;
        color: black;
        font-size: 15px;
        font-family: 'Rajdhani';
    }

    .mainFormButton:hover{
        background-color: #58c5c7;
        color: white;
     
    }




</style>