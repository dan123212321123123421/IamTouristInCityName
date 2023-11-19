<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
   <link rel="stylesheet" href="test1.css"> 
</head>
<body>
    <header>
    <ul class="ButoaneNAV">
        <li class="ButNAV"><a href="../../HomePage/locations/index.html">Locations</a></li>
        <li class="ButNAV"><a href="../../HomePage/events/index.html">Events</a></li>
        <li class="ButNAV"><a href="../../Login-Profile/indexPROFILE.php">Profile</a></li>
    </ul>
    </header>
    <div class="container">
        <button class="button" onclick="toggleSidebar()">Announcement</button>
        <div id="mySidebar" class="sidebar">
            <div class="scrollable-content">
                  <div style="text-align: center;">
                    <h2>Announcements</h2>
                    <p>Stay updated with the latest announcements and news about Timisoara.</p>
                    <br>
                 <ol class="gradient-list">
                    <li class="announcement">
                    <h2>Announcement 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac tellus vel libero scelerisque volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac tellus vel libero scelerisque volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac tellus vel libero scelerisque volutpat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac tellus vel libero scelerisque volutpat.</p>
                    </li>

                    <li class="announcement">
                    <h2>Announcement 2</h2>
                    <p>Quisque ut justo in tortor convallis accumsan. Integer auctor, turpis sit amet interdum varius, felis justo malesuada nulla.Quisque ut justo in tortor convallis accumsan. Integer auctor, turpis sit amet interdum varius, felis justo malesuada nulla.Quisque ut justo in tortor convallis accumsan. Integer auctor, turpis sit amet interdum varius, felis justo malesuada nulla.Quisque ut justo in tortor convallis accumsan. Integer auctor, turpis sit amet interdum varius, felis justo malesuada nulla.</p>
                    </li>

                    <li class="announcement">
                    <h2>Announcement 3</h2>
                    <p>Nullam ac justo sit amet orci pretium tristique. Etiam in odio quis elit tristique hendrerit at id liberoNullam ac justo sit amet orci pretium tristique. Etiam in odio quis elit tristique hendrerit at id liberoNullam ac justo sit amet orci pretium tristique. Etiam in odio quis elit tristique hendrerit at id libero.Nullam ac justo sit amet orci pretium tristique. Etiam in odio quis elit tristique hendrerit at id liberoNullam ac justo sit amet orci pretium tristique. Etiam in odio quis elit tristique hendrerit at id liberoNullam ac justo sit amet orci pretium tristique. Etiam in odio quis elit tristique hendrerit at id liberNullam ac justo sit amet orci pretium tristique. Etiam in odio quis elit tristique hendrerit at id liberoNullam ac justo sit amet orci pretium tristique. Etiam in odio quis elit tristique hendrerit at id liberoNullam ac justo sit amet orci pretium tristique. Etiam in odio quis elit tristique hendrerit at id liberNullam ac justo sit amet orci pretium tristique. Etiam in odio quis elit tristique hendrerit at id liberoNullam ac justo sit amet orci pretium tristique. Etiam in odio quis elit tristique hendrerit at id liberoNullam ac justo sit amet orci pretium tristique. Etiam in odio quis elit tristique hendrerit at id liberNullam ac justo sit amet orci pretium tristique. Etiam in odio quis elit tristique hendrerit at id liberoNullam ac justo sit amet orci pretium tristique. Etiam in odio quis elit tristique hendrerit at id liberoNullam ac justo sit amet orci pretium tristique. Etiam in odio quis elit tristique hendrerit at id liber</p>
                    </li>
                </ol>
            </div>
            </div>
        </div>
        
            
<script>
    function toggleSidebar() {
        var sidebar = document.getElementById('mySidebar');
        if (sidebar.style.width === '500px') {
            sidebar.style.width = '0';
        } else {
            sidebar.style.width = '500px';
        }
    }
</script>
    
    <header class="header2">
        
        
        <div class="text-box">
            <h1 class="heading-primary">
                <span class="heading-primary-main">Welcome to Timisoara</span>
                <span class="heading-primary-sub">Explore the beauty and culture of this vibrant Romanian city</span>
            </h1>
            <a href="#" class="btn btn-white btn-animated">Discover the city</a>
        </div>
    </header>


    <footer>
        <p></p>
    </footer>

</body>
</html>