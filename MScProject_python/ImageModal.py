import cv2
import numpy as np
import kagglehub

# Download latest version

def detect_deepfake(image_path):
    # Load the image
    image = cv2.imread(image_path)
    # Convert the image to grayscale
    #gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)

    # Download the dataset
    path = kagglehub.dataset_download("tristanzhang32/ai-generated-images-vs-real-images")

    print("Path to dataset files:", path)

    # Load the dataset
    dataset = kagglehub.load_dataset(path)

    print("Dataset loaded:", dataset)

    # Train the model
    model = kagglehub.train_model(dataset)

    print("Model trained:", model)

    # Test the model        
    result = kagglehub.test_model(model, image_path)

    print("Result:", result)

    return result

detect_deepfake('../Images/dog_ai_image.jpg')