resources = [
    ("R1", 2, 40),
    ("R2", 3, 50),
    ("R3", 4, 70)
]

capacity = 6

dp = [[0] * (capacity + 1) for _ in range(len(resources) + 1)]

for i in range(1, len(resources) + 1):
    weight = resources[i - 1][1]
    value = resources[i - 1][2]

    for c in range(capacity + 1):
        if weight <= c:
            dp[i][c] = max(
                dp[i - 1][c],
                value + dp[i - 1][c - weight]
            )
        else:
            dp[i][c] = dp[i - 1][c]

print("Maximum value:", dp[-1][-1])
