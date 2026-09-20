items = [(10, 60), (20, 100), (30, 120)]
capacity = 50

items.sort(key=lambda x: x[1] / x[0], reverse=True)

profit = 0

for weight, value in items:
    if capacity == 0:
        break
    take = min(weight, capacity)
    profit += take * value / weight
    capacity -= take

print("Maximum value:", profit)
