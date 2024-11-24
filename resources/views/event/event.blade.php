<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* General reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

       

        /* Event Header */
        .event-header {
            position: relative;
            height: 450px;
            overflow: hidden; /*masquer */
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
        }

        .event-image {
            width: 100%;
            height: 100%;
            filter: blur(8px); /* Ajout du flou */

            object-fit: cover;
        }

        .event-content {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
        }

        .event-content h1 {
            font-size: 36px;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            letter-spacing: 0.5rem; /* Space between letters */

        }

        .event-content p {
            margin: 5px 0;
        }

        .event-content .price {
            font-size: 20px;
            font-weight: bold;
        }

        /* Event Box */
        .event-box {
            display: flex;
            max-width: 80%;
            margin: auto;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        .event-content h4{
            font-style:bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0.2, 0.6);
        }
        .event-content h5{
            font-style:bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0.2, 0.6);
        }

        /* Event Details */
        .box-details {
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .box-details h1 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .box-description {
            font-size: 16px;
            margin-bottom: 20px;
            line-height: 1.5;
            color: #333;
        }

        /* Event Info Section */
        .box-info p {
            font-size: 14px;
            margin: 8px 0;
            color: #666;
            display: flex;
            align-items: center;
        }

        .box-info p i {
            margin-right: 10px;
            color: #007bff;
        }

        .box-info a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

      

        /* Participate Button */
        .box-btn {
            background-color: while;
            color: #007bff;
            padding: 12px 20px;
            border: none;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            text-transform: uppercase;

            align-self: flex-start;
        }


        /* Responsive Design */
        @media (max-width: 768px) {
            .event-box {
                flex-direction: column;
                max-width: 100%;
            }

            .event-header {
                height: 300px;
            }

            .event-content h1 {
                font-size: 28px;
                color:bleu;
            }

            .box-details h1 {
                font-size: 24px;
            }

            .box-description {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

@include('header_accueil')

<div class="event-header">
    <img src="assets/img/web.jpeg" alt="Event Image" class="event-image">
    <div class="event-content">
    <h1>WEB DEVELOPMENT</h1>
        <h4><i class="fas fa-graduation-cap" style="margin-right: 10px;"></i>Elite Training Center</h4>
        <h5><i class="fas fa-dollar-sign" style="margin-right: 10px;"></i>80 TND</h5> <!-- Dollar sign icon for price -->
    </div>
</div>

<div class="event-box">
    <!-- Event Content -->
    <div class="box-details">
        <h1>WEB DEVELOPMENT</h1>
        <hr>
        <p class="box-description">
        Join us for an immersive Web Development Workshop designed for technology enthusiasts and those eager to learn new skills. Dive into the world of web development as you learn to create modern and interactive websites. Throughout this workshop, you'll gain foundational knowledge in HTML and CSS for structuring and styling web pages, explore JavaScript to add dynamic features, and get introduced to popular frameworks like React and Bootstrap. Whether you're a beginner or looking to enhance your skills, this workshop will equip you with practical experience and resources to kickstart your journey in web development.


        </p>

        <div class="box-info">
            <p><i class="fas fa-calendar-alt"></i> Date: 12 October 2024</p>
            <p><i class="fas fa-clock"></i> Time: 7:00 PM</p>
            <p><i class="fas fa-map-marker-alt"></i> School Center</p>
            <p><i class="fas fa-link"></i> <a href="#">Official Event Page</a></p>
        </div>

        <!-- Participate Button -->
        <button class="box-btn">Participate</button>
    </div>
</div>

@include('footer_accueil')

</body>
</html>
