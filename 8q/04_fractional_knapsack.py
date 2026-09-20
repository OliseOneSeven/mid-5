def fractional_knapsack(capacity, weights, values):
    n = len(values)
    items = []

    # Calculate value/weight ratio
    for i in range(n):
        ratio = values[i] / weights[i]
        items.append((ratio, values[i], weights[i]))

    # Highest ratio first
    items.sort(reverse=True)

    total_value = 0.0

    for ratio, value, weight in items:
        if capacity >= weight:
            capacity -= weight
            total_value += value
        else:
            total_value += ratio * capacity
            break

    return total_value


values = [100, 60, 120]
weights = [20, 10, 30]
capacity = 50

result = fractional_knapsack(capacity, weights, values)

print("Maximum value in knapsack =", round(result, 2))
