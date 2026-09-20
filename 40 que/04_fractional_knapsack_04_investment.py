investments = [
    ("A", 1000, 150),
    ("B", 2000, 240),
    ("C", 1500, 210)
]

budget = 3000

investments.sort(key=lambda x: x[2] / x[1], reverse=True)

return_value = 0

for name, cost, gain in investments:
    take = min(cost, budget)
    return_value += take * gain / cost
    budget -= take
    if budget == 0:
        break

print("Maximum return:", return_value)
