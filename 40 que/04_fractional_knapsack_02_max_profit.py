weights = [10, 20, 30]
values = [60, 100, 120]
capacity = 50

items = sorted(zip(weights, values), key=lambda x: x[1] / x[0], reverse=True)

profit = 0

for weight, value in items:
    take = min(weight, capacity)
    profit += take * value / weight
    capacity -= take
    if capacity == 0:
        break

print("Maximum profit:", profit)
