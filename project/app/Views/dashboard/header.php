<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perpus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<style>
    .container{
        padding-left : 0px;
        width: 100%;
        margin: 0;
        display: flex;
        
    }
    .sidebar{
        width: 200px;
    }
    .content{
        flex-grow: 1;
        padding: 20px;
    }
    header{
        background-color: #526D82;
        color: white;
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center ;
    }

    header h1{
        margin: 0;    
        padding: 0;
        text-align: center;
        flex-grow: 1;
        font-size: 30px;    
    }

    header .material-icons{
        font-size: 20px;
        margin-right: 2%;
    }

    @media (max-width: 768px) {
        .container{
            flex-direction: column;
        }
        .sidebar{
            width: 100%;
        }
        .content{
            padding: 2%;
        }
        header{
            flex-direction: column;
            align-items: flex-start;
        }

        header h1{
            margin: 0;    
            padding: 0;
            text-align: center;
            flex-grow: 1;
            font-size: 4vw;    
        }

        header .bi-columns{
            margin-right: 0;
            margin-right: 2%;
        }
    }

</style>
</head>
<body>
    <header>
        <i class="bi bi-columns"></i>
        <h1>header</h1>
    </header>

    <script>
        var sidebar = document.getElementById('sidebar');
        var content = document.getElementById('content');

        sidebar.style.float = 'left';
        content.style.marginLeft = '20%';
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

