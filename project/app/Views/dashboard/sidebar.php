<div class="sidebar">
    <ul>
        <li><a href="#">menu 1</a></li>
        <li><a href="#">menu 2</a></li>
        <li><a href="#">menu 3</a></li>
        <li><a href="#">menu 4</a></li>
    </ul>
</div>

<style>
    .sidebar{
        height: 90vh;
        width: 20%;
        background-color: #27374D;
    }
    .sidebar ul{
        list-style: none;
        padding: 2%;
    }
    .sidebar li{
        margin-bottom: 1%;
    }
    .sidebar a{
        display: block;
        text-decoration: none;
        padding : 20px;
        color: white;
        font-size: 20px;
        white-space: nowrap;
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