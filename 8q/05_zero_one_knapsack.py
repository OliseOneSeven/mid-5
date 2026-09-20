def knapsackRec(W, val, wt, n):
    if n == 0 or W == 0:
        return 0

    pick = 0

    if wt[n - 1] <= W:
        pick = val[n - 1] + knapsackRec(
            W - wt[n - 1],
            val,
            wt,
            n - 1
        )

    notPick = knapsackRec(W, val, wt, n - 1)

    return max(pick, notPick)


def knapsack(W, val, wt):
    n = len(val)
    return knapsackRec(W, val, wt, n)


if __name__ == "__main__":
    val = [1, 7, 11]
    wt = [1, 2, 3]
    W = 5

    print(knapsack(W, val, wt))
