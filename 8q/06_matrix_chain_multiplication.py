mc = [[-1 for n in range(50)] for m in range(50)]


def DynamicProgramming(c, i, j):
    if i == j:
        return 0

    if mc[i][j] != -1:
        return mc[i][j]

    mc[i][j] = 999999

    for k in range(i, j):
        cost = (
            DynamicProgramming(c, i, k)
            + DynamicProgramming(c, k + 1, j)
            + c[i - 1] * c[k] * c[j]
        )

        mc[i][j] = min(mc[i][j], cost)

    return mc[i][j]


def Matrix(c, n):
    i = 1
    j = n - 1

    return DynamicProgramming(c, i, j)


arr = [5, 10, 15, 20, 25]
n = len(arr)

print("Minimum number of multiplications is:")
print(Matrix(arr, n))
