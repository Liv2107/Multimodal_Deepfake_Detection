from fastapi import FastAPI
from pydantic import BaseModel
from ImageModal import detect_deepfake

app = FastAPI()

class PredictInput(BaseModel):
    image_path: str

@app.get("/health")
def health():
    return {"ok": True}

@app.post("/predict")
def predict(payload: PredictInput):
    return {"result": detect_deepfake(payload.image_path)}