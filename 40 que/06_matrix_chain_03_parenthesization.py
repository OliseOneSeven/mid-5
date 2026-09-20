def matrix_chain(p):
    n = len(p) - 1
    dp = [[0] * n for _ in range(n)]
    split = [[0] * n for _ in range(n)]

    for length in range(2, n + 1):
        for i in range(n - length + 1):
            j = i + length - 1
            dp[i][j] = float("inf")

            for k in range(i, j):
                cost = (
                    dp[i][k]
                    + dp[k + 1][j]
                    + p[i] * p[k + 1] * p[j + 1]
                )

                if cost < dp[i][j]:
                    dp[i][j] = cost
                    split[i][j] = k

    def build(i, j):
        if i == j:
            return "A" + str(i + 1)

        k = split[i][j]
        return "(" + build(i, k) + " x " + build(k + 1, j) + ")"

    return dp[0][n - 1], build(0, n - 1)

print(matrix_chain([10, 20, 30, 40]))
