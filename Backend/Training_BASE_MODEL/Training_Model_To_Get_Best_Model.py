# pip install ultralytics -q

from ultralytics import YOLO

model = YOLO("yolov8s.pt")

model.train(data="data.yaml", epochs = 100)

infer = YOLO("runs\\detect\\train\\weights\\best.pt")

def smooth_bboxes(detections, alpha=0.6):
    smoothed_detections = []
    prev_detections = None

    for detection in detections:
        if prev_detections is None:
            smoothed_detections.append(detection)
        else:
            smoothed = []
            for current, prev in zip(detection, prev_detections):
                x1 = alpha * current[0] + (1 - alpha) * prev[0]
                y1 = alpha * current[1] + (1 - alpha) * prev[1]
                x2 = alpha * current[2] + (1 - alpha) * prev[2]
                y2 = alpha * current[3] + (1 - alpha) * prev[3]
                smoothed.append([x1, y1, x2, y2, current[4], current[5]])
            smoothed_detections.append(smoothed)
        prev_detections = detection
    return smoothed_detections

infer.predict("Dataset/test/images", save = True, save_txt = True)