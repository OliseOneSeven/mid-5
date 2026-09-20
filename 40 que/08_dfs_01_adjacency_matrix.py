graph = [
    [0, 1, 1, 0],
    [1, 0, 0, 1],
    [1, 0, 0, 1],
    [0, 1, 1, 0]
]

visited = [False] * 4

def dfs(vertex):
    visited[vertex] = True
    print(vertex, end=" ")

    for i in range(4):
        if graph[vertex][i] and not visited[i]:
            dfs(i)

dfs(0)
