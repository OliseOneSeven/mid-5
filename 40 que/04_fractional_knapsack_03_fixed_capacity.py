items = [
    ("A", 10, 60),
    ("B", 20, 100),
    ("C", 30, 120)
]

capacity = 35

items.sort(key=lambda x: x[2] / x[1], reverse=True)

for name, weight, value in items:
    if capacity == 0:
        break
    take = min(weight, capacity)
    print(name, "weight taken:", take)
    capacity -= take
