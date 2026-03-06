

class Ball:
    def __init__(self, color, size, weight):
        self.color = color
        self.size = size
        self.weight = weight

    # print the ball object
    def __str__(self):
        return f"Ball(color={self.color}, size={self.size}, weight={self.weight})"  