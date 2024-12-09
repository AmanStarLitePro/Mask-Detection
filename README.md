# Face Mask Detection Project

Welcome to the **Face Mask Detection System** repository! This project demonstrates a Face Mask Detection System leveraging YOLOv8s, OpenCV, and Flask for detecting the presence of face masks in video frames. The system processes uploaded videos, detects individuals wearing or not wearing masks, and provides an output video with bounding boxes and annotations.

## 📄 Overview
The system uses:

- YOLOv8s: For object detection (detecting whether a person is wearing a mask or not).
- OpenCV: For labeling bounding boxes on the video frames.
- Flask: For API creation to handle video upload and processing.
- Flask-CORS: For enabling cross-origin requests between the frontend and backend.

The project is structured as follows:

- Frontend: A simple HTML form for uploading videos via a browser.
- Backend: Flask-based API handling video processing and sending the output.

## 🧑‍💻 Tech Stack Used

#### **Frontend**:
1. HTML
2. CSS
3. JavaScript (jQuery)
4. PHP

#### **Backend**:
1. Python
2. Flask
3. Flask-CORS
4. OpenCV

#### **YOLOv8 Model Training**:
1. Ultralytics YOLOv8
2. Python

#### **Libraries and Tools**:
1. Logging (Python Standard Library)
2. Python UUID

## 🗂 Table of Contents
- [Introduction](#-overview)
- [Requirements](#-requirements)
- [Demo Video](#-demo-video)
- [Project Illustration Video](#-illustration-video)
- [Preprocessing](#-preprocessing)
- [Features](#-features)
- [API Integration](#-api-integration)
- [Output](#-output)
- [How To Run](#-how-to-run)
- [Workflow](#-workflow)
- [Notes](#-notes)
- [Future Improvements](#-future-improvements)

## 📦 Requirements
1. [Ultralytics Python Library](https://docs.ultralytics.com/)
2. [OpenCV Python Library](https://docs.opencv.org/4.x/)
3. [Flask Python Library](https://flask.palletsprojects.com/en/stable/)
4. [Flask-CORS Python Library](https://flask-cors.readthedocs.io/en/latest/)
5. [PyYAML Python Library](https://pyyaml.org/wiki/PyYAMLDocumentation)
6. [UUID Python Library](https://docs.python.org/3/library/uuid.html)
7. [Logging Python Library](https://docs.python.org/3/library/logging.html)

## 🎥 Demo Video
https://github.com/user-attachments/assets/fb59ca1d-e4da-4e2b-89b0-cc0f33321d39

## 🎥 Illustration Video
https://github.com/user-attachments/assets/4dbd2522-fcf7-4540-9387-17a7ba6148bb

## 🛠 Preprocessing
![Preprocessing](https://github.com/user-attachments/assets/84de08fe-a583-4d4b-ad5b-7dc68c4ff66d)

## 🎯 Features

**Video Upload and Processing**
   
   - Users can upload a video through the frontend.
   - The backend processes the video, applies the YOLOv8s model for face mask detection, and outputs a processed video with bounding boxes.
     
**Smooth Bounding Boxes**
   
   - Uses a smoothing algorithm for bounding box transitions across frames, ensuring a more stable visual output.

**Output Video Download**
   
   - Once processing is complete, the processed video can be downloaded via the frontend.

## 🖥️ API Integration

- **Upload**: Accepts a video file from frontend for processing video and saves the video in the uploads folder.
- **Process_Video**: Processes the uploaded video using the YOLOv8s model and returns the processed video as a downloadable file.

## 📊 Output
![Output](https://github.com/user-attachments/assets/38dae375-af91-4162-84a4-5d76c31e7d29)

## 🛠 How to Run

1. Set Up the Backend   
   - Clone this repository and navigate to the Backend folder.
   - Install the required dependencies using the provided requirements.txt.
   - Run the backend:
   ```sh
      python main.py
   ```

2. Run the Frontend   
   - Navigate to the Frontend folder.
   - Use XAMPP or any other PHP server to host the index.php file.
   - Access the frontend in a browser:
   ```sh
      http://localhost/index.php
   ```

## 📊 Workflow

**Frontend**:
 - Displays a form where the user uploads a video.
 - Submits the video using an AJAX request to the Flask API.
 - Shows a loading indicator during processing and provides a download link for the processed video.

**Backend (Flask)**:
 - Handles video upload and processes the video using the YOLOv8 model.
 - Annotates the video with bounding boxes and labels for detected objects.
 - Returns the processed video to the frontend.

**Model Training**:
 - Uses YOLOv8 to train on labeled datasets to produce the best.pt model.
 - This model is integrated into the Flask app for real-time predictions.

## 📝 Notes

- The YOLOv8s model was trained on a Kaggle dataset containing images of individuals with and without masks.
- Images were annotated and split into training, validation, and testing sets for robust model training.
- Smoothing Algorithm : Averages bounding box positions across frames using a smoothing factor (alpha=0.6) for better video output.

## 📬 Future Improvements

- Enhance the frontend interface with more detailed visualizations.
- Add support for multiple file uploads.
- Implement a dashboard for tracking processing history.


