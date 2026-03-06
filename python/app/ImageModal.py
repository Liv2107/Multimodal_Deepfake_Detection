import os

import cv2
import numpy as np
import kagglehub

# Download once and reuse (cached after first run)
DATASET_PATH = kagglehub.dataset_download(
    "tristanzhang32/ai-generated-images-vs-real-images"
)


def detect_deepfake(image_path: str) -> str:
    image = cv2.imread(image_path)
    if image is None:
        return "error: could not load image"

    # TODO: add real model inference using DATASET_PATH
    return "placeholder (no model yet)"


if __name__ == "__main__":
    test_path = os.path.join(
        os.path.dirname(__file__),
        "..",
        "shared",
        "images",
        "dog_ai_image.jpg",
    )
    print("Result:", detect_deepfake(test_path))