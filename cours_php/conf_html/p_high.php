<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice de la manu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <style>
    
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');

    body
    {
        background-color: #2c3e50 !important;
    }

    *
    {
        font-family: 'Roboto', sans-serif;
    }

    ::placeholder
    {
        color: white !important;
    }
    ::placeholder:hover
    {
        transition: 0.2s !important;
    }
    
    :focus 
    {
        box-shadow: none !important;
    }

    span
    {
        display: flex !important; 
        align-items: center !important;
        justify-content: center !important;
        height: 45px !important;
        width: 45px !important;
        border: none !important;
        background: #34495e !important;
    }
    i
    {
        color: white !important;
        display: inline !important;
    }

    form
    {
        border-radius: 10px !important;
        background: white !important;
        padding: 40px !important;
    }

    .Input_select
    {
        color: white !important;
        background: #2c3e50 !important;
        border: none !important;
        border-bottom: 3px solid #34495e !important;
        width: 83% !important;
    }
    .Input_select:hover
    {
        transition: 0.2s !important;
        border-bottom: 3px solid white !important;
        background: #34495e !important;
        padding-left: 20px !important;
    }

    .Input_date 
    {   
        color: white !important;
        background: #2c3e50 !important;
        border: none !important;
        border-bottom: 3px solid #34495e !important;
        
    }
    .Input_date:hover
    {
        transition: 0.2s !important;
        border-bottom: 3px solid white !important;
        background: #34495e !important;
        cursor: pointer !important;
        padding-left: 20px !important;
    }

    .Input_text
    {
        color: white !important;
        background: #2c3e50 !important;
        border: none !important;
        border-bottom: 3px solid #2c3e50 !important;
    }
    .Input_text:hover
    {
        transition: 0.2s !important;
        border-bottom: 3px solid #2c3e50 !important;
        background: #1D2834 !important;
        padding-left: 20px !important;
    }

    .Input_email
    {
        color: white !important;
        background: #2c3e50 !important;
        border: none !important;
        border-bottom: 3px solid #34495e !important;
    }
    .Input_email:hover
    {
        transition: 0.2s !important;
        background: #34495e !important;
        border-bottom: 3px solid white !important;
        padding-left: 20px !important;
    }

    .Input_number
    {
        color: white !important;
        background: #2c3e50 !important;
        border: none !important;
        border-bottom: 3px solid #34495e !important;
    }
    .Input_number:hover
    {
        transition: 0.2s !important;
        background: #34495e !important;
        border-bottom: 3px solid white !important;
        padding-left: 20px !important;
    }

    .Input_textarea
    {
        color: white !important;
        background: #2c3e50 !important;
        border: none !important;
        border-bottom: 3px solid #34495e !important;
    }
    .Input_textarea:hover
    {
        transition: 0.2s !important;
        background: #34495e !important;
        border-bottom: 3px solid white !important;
        padding-left: 20px !important;
    }
    
    .Input_tel
    {
        color: white !important;
        background: #2c3e50 !important;
        border: 0 none !important;
        border-bottom: 3px solid #34495e !important;
    }
    .Input_tel:hover
    {
        transition: 0.2s !important;
        background: #34495e !important;
        border-bottom: 3px solid white !important;
        padding-left: 20px !important;
    }

    .Input_btn
    {
        border: 1px solid #34495e !important;
        border-radius: 5px !important;
        color: white !important;
        background: #34495e !important;
    }
    .Input_btn:hover
    {
        transition: 0.2s !important;
        background: #2c3e50 !important;
    }

    </style>
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="container vh-100 w-100 px-5">