items = [
    ("A", 10, 60),
    ("B", 20, 100),
    ("C", 30, 120)
]

capacity = 50
items.sort(key=lambda x: x[2] / x[1], reverse=True)

profit = 0

for name, weight, value in items:
    take = min(weight, capacity)
    gain = take * value / weight
    profit += gain
    capacity -= take
    print(name, "taken:", take, "gain:", gain, "total:", profit)
    if capacity == 0:
        break
