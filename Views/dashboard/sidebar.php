<div class="sidebar" id="sidebar">
    <ul>
        <li><a href="#">menu 1</a></li>
        <li><a href="#">menu 2</a></li>
        <li><a href="#">menu 3</a></li>
        <li><a href="#">menu 4</a></li>
    </ul>
</div>

<style>
    .sidebar{
        display: flex;
        justify-content: center;
        text-align: center;
        height: 90vh;
        background-color: #2C3333;
        transition: 200ms;
        
    }
    .sidebar ul{
        width: 100%;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .sidebar li{
        margin-top: 3%;
        
    }
    .sidebar a{
        width: 100%;
        display: block;
        padding: 10px;
        background-color: #2C3333;
        text-decoration: none;
        color: white;
        font-size: 20px;
        white-space: nowrap;
    }

    .sidebar a:hover {
        background-color: #282c2c;
    }
    @media (max-width: 768px) {
        .sidebar{
            width: 100%;
        }
        .sidebar ul{
            padding: 2%;
        }
        .sidebar li{
            margin-bottom: 2%;
        }
    }

</style>