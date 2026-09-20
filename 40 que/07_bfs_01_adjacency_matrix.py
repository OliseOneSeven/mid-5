graph = [
    [0, 1, 1, 0],
    [1, 0, 0, 1],
    [1, 0, 0, 1],
    [0, 1, 1, 0]
]

visited = [False] * 4
queue = [0]
visited[0] = True

while queue:
    vertex = queue.pop(0)
    print(vertex, end=" ")

    for i in range(4):
        if graph[vertex][i] and not visited[i]:
            visited[i] = True
            queue.append(i)
