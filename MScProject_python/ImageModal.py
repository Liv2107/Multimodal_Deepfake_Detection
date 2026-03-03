import cv2
import numpy as np
import kagglehub

# Download once and reuse
DATASET_PATH = kagglehub.dataset_download(
    "tristanzhang32/ai-generated-images-vs-real-images"
)
DATASET = kagglehub.load_dataset(DATASET_PATH)
MODEL = kagglehub.train_model(DATASET)

def detect_deepfake(image_path: str) -> str:
    # Load the image
    image = cv2.imread(image_path)
    result = kagglehub.test_model(MODEL, image_path)

    print("Result:", result)

    return result

detect_deepfake("../Images/dog_ai_image.jpg")