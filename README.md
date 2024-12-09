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

## 🗂 Table of Contents
- [Introduction](#-overview)
- [Requirements](#-requirements)
- [Demo Video](#-demo-video)
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

![Video](https://github.com/user-attachments/assets/0ab02ebe-518f-449d-820b-67cdc3fce1f9)

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

- Upload: The user uploads a video through the frontend form.
  
- Processing:
  - The backend processes the video:
  - YOLOv8s detects individuals wearing or not wearing masks.
  - Bounding boxes are annotated on frames.
  - Smoothing ensures stable bounding box transitions.
    
- Output: The processed video is made available for download via the frontend.

## 📝 Notes

- The YOLOv8s model was trained on a Kaggle dataset containing images of individuals with and without masks.
- Images were annotated and split into training, validation, and testing sets for robust model training.
- Smoothing Algorithm : Averages bounding box positions across frames using a smoothing factor (alpha=0.6) for better video output.

## 📬 Future Improvements

- Enhance the frontend interface with more detailed visualizations.
- Add support for multiple file uploads.
- Implement a dashboard for tracking processing history.


