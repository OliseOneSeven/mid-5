graph = {
    0: [1, 2],
    1: [0, 3],
    2: [0, 3],
    3: [1, 2]
}

visited = set()
queue = [0]
visited.add(0)

while queue:
    vertex = queue.pop(0)
    print(vertex, end=" ")

    for node in graph[vertex]:
        if node not in visited:
            visited.add(node)
            queue.append(node)
