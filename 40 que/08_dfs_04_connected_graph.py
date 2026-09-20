graph = {
    0: [1, 2],
    1: [0, 3],
    2: [0, 3],
    3: [1, 2]
}

visited = set()

def dfs(vertex):
    visited.add(vertex)

    for node in graph[vertex]:
        if node not in visited:
            dfs(node)

dfs(0)

print("Connected" if len(visited) == len(graph) else "Not Connected")
