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

    for node in graph[vertex]:
        if node not in visited:
            visited.add(node)
            queue.append(node)

print("Connected" if len(visited) == len(graph) else "Not Connected")
