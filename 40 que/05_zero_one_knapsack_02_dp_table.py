weights = [1, 3, 4, 5]
values = [1, 4, 5, 7]
capacity = 7

dp = [[0] * (capacity + 1) for _ in range(len(weights) + 1)]

for i in range(1, len(weights) + 1):
    for w in range(capacity + 1):
        if weights[i - 1] <= w:
            dp[i][w] = max(
                dp[i - 1][w],
                values[i - 1] + dp[i - 1][w - weights[i - 1]]
            )
        else:
            dp[i][w] = dp[i - 1][w]

for row in dp:
    print(row)

print("Maximum value:", dp[-1][-1])
