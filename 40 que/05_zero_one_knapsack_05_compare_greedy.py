weights = [10, 20, 30]
values = [60, 100, 120]
capacity = 50

items = sorted(zip(weights, values), key=lambda x: x[1] / x[0], reverse=True)

greedy = 0
remaining = capacity

for weight, value in items:
    if weight <= remaining:
        greedy += value
        remaining -= weight

n = len(weights)
dp = [[0] * (capacity + 1) for _ in range(n + 1)]

for i in range(1, n + 1):
    for c in range(capacity + 1):
        if weights[i - 1] <= c:
            dp[i][c] = max(
                dp[i - 1][c],
                values[i - 1] + dp[i - 1][c - weights[i - 1]]
            )
        else:
            dp[i][c] = dp[i - 1][c]

print("Greedy:", greedy)
print("0/1 Knapsack:", dp[n][capacity])
