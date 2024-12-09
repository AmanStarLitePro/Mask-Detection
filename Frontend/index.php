<!DOCTYPE html>
<html>
<head>
  <title>Face Mask Detection</title>
  <style>
    body {
      margin: 0px;
    }

    .container {
      width: 80%;
      margin: 20px auto;
      padding: 5px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      background-color: #F1F3F4;
    }

    .banner {
      width: 100%;
      height: 120px;
      background-color: maroon;
      border-bottom: 1px solid #ccc;
      text-align: center;
      padding: 5px;
      box-sizing: border-box;
    }

    #PROJECT {
      color: yellow;
      font-size: 44px;
      font-family: bookman old style;
      padding-top: 15px;
    }

    .body {
      min-width: 100%;
      margin: 0px 0;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .right-column {
      min-width: 70%;
      align-content: center;
      background-color: #F1F3F4;
      padding: 10px;
      min-height: 300px;
      box-sizing: border-box;
    }

    .login-container {
      width: 300px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #3e8e41;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #3e8e41;
      font-size: 18px;
    }

    input[type="text"], input[type="number"], input[type="file"] {
      width: 100%;
      height: 20px;
      padding: 5px;
      border: 1px solid #ccc;
    }

    select {
      width: 100%;
      height: 30px;
      padding: 5px;
      border: 1px solid #ccc;
    }

    button[type="submit"] {
      width: 100%;
      height: 30px;
      background-color: #4CAF50;
      color: #fff;
      padding: 5px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #3e8e41;
    }

    #txt2 {
      color: orange;
      font-size: 20px;
      font-weight: bold;
      text-transform: capitalize;
      margin-bottom: 10px;
    }

    a {
      font-size: 18px;
      color: navy;
      text-decoration: none;
      font-family: tahoma;
    }

    a:hover {
      font-size: 18px;
      color: magenta;
      text-decoration: underline;
      font-family: tahoma;
    }

    .Loading {
      color: green;
      margin: 10px 0;
    }

    .loader {
      border: 16px solid #000000;
      border-top: 16px solid #3498db;
      border-radius: 50%;
      width: 120px;
      height: 120px;
      animation: spin 2s linear infinite;
      margin: 20px 0;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    #downloadLink {
      margin-top: 20px;
      display: none;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#studentForm').on('submit', function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        $('.body').html(`
          <br>
          <div class="loader"></div>
          <h1 class="Loading">Wait for few Minutes ... </h1>
          <br>
        `);

        $.ajax({
          url: 'http://localhost:5000/upload',
          type: 'POST',
          data: formData,
          processData: false,
          contentType: false,
          success: function (response) {
            var videoPath = response.video_path;
            $.ajax({
              url: 'http://localhost:5000/process_video',
              type: 'POST',
              contentType: 'application/json',
              data: JSON.stringify({ video_path: videoPath }),
              xhrFields: {
                responseType: 'blob'
              },
              success: function (processedResponse) {
                var blob = processedResponse;
                var link = document.createElement('a');
                link.href = URL.createObjectURL(blob);
                link.download = 'processed_video.mp4';
                link.textContent = 'Click here to download the processed video';

                $('.body').html('');
                $('#downloadLink').html(link).show();
              },
              error: function () {
                alert('Error occurred while processing the video.');
              }
            });
          },
          error: function () {
            alert('Error occurred while uploading the video.');
          }
        });
      });
    });
  </script>
</head>
<body>
  <div class="container">
    <div class="banner">
      <div id="PROJECT">Face Mask Detection Project</div>
    </div>
    <div class="body">
      <div class="right-column">
        <div class="login-container">
          <div id="txt2">Add a Video</div>
          <form id="studentForm">
            <div class="form-group">
              <label for="video">Insert a Video</label>
              <input type="file" id="video" name="video" required>
            </div>
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <div id="downloadLink"></div>
  </div>
</body>
</html>
