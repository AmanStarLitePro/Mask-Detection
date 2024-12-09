Face Mask Detection Project


This project demonstrates a Face Mask Detection System leveraging YOLOv8s, OpenCV, and Flask for detecting the presence of face masks in video frames. The system processes uploaded videos, detects individuals wearing or not wearing masks, and provides an output video with bounding boxes and annotations.


📄 Overview
The system uses:

YOLOv8s: For object detection (detecting whether a person is wearing a mask or not).
OpenCV: For labeling bounding boxes on the video frames.
Flask: For API creation to handle video upload and processing.
Flask-CORS: For enabling cross-origin requests between the frontend and backend.
The project is structured as follows:

Frontend: A simple HTML form for uploading videos via a browser.
Backend: Flask-based API handling video processing and sending the output.


🗂 Folder Structure
plaintext
Copy code
.
├── main.py               # Backend Flask API code
├── best.pt               # Trained YOLOv8s model weights
├── uploads/              # Directory for storing uploaded videos
├── processed_videos/     # Directory for saving processed videos
├── templates/
│   └── index.php         # Frontend HTML file
└── requirements.txt      # Dependencies


🚀 Features
1. Video Upload and Processing
Users can upload a video through the frontend.
The backend processes the video, applies the YOLOv8s model for face mask detection, and outputs a processed video with bounding boxes.
2. Smooth Bounding Boxes
Uses a smoothing algorithm for bounding box transitions across frames, ensuring a more stable visual output.
3. Output Video Download
Once processing is complete, the processed video can be downloaded via the frontend.


🖥️ Frontend Details
Key Features:
Built using HTML, CSS, and JavaScript.
Simple form interface to upload videos.
Displays a loading animation while processing the video.
Provides a download link for the processed video upon completion.


🔗 API Endpoints
Base URL
plaintext
Copy code
http://127.0.0.1:5000/
Endpoints
Welcome Endpoint

plaintext
Copy code
GET /
Returns a welcome message.
Video Upload

plaintext
Copy code
POST /upload
Accepts a video file for processing.
Saves the video in the uploads folder.
Process Video

plaintext
Copy code
POST /process_video
Processes the uploaded video using the YOLOv8s model.
Returns the processed video as a downloadable file.


📦 Requirements
Install the necessary dependencies:

bash
Copy code
pip install -r requirements.txt
Required Libraries:
flask
flask-cors
ultralytics
opencv-python
uuid
logging


🛠 How to Run
1. Set Up the Backend
Clone this repository and navigate to the folder.
Install the required dependencies using the provided requirements.txt.
Place the trained YOLOv8s model weights (best.pt) in the project directory.
Run the backend:
bash
Copy code
python main.py
2. Run the Frontend
Use XAMPP or any other PHP server to host the index.php file.
Access the frontend in a browser:
plaintext
Copy code
http://localhost/index.php


📊 Workflow
Upload: The user uploads a video through the frontend form.
Processing: The backend processes the video:
YOLOv8s detects individuals wearing or not wearing masks.
Bounding boxes are annotated on frames.
Smoothing ensures stable bounding box transitions.
Output: The processed video is made available for download via the frontend.


📝 Notes
Training Data
The YOLOv8s model was trained on a Kaggle dataset containing images of individuals with and without masks.
Images were annotated and split into training, validation, and testing sets for robust model training.
Smoothing Algorithm
Averages bounding box positions across frames using a smoothing factor (alpha=0.6) for better video output.


📬 Future Improvements
Enhance the frontend interface with more detailed visualizations.
Add support for multiple file uploads.
Implement a dashboard for tracking processing history.